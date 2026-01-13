#!/usr/bin/env python3
"""
Generate an isometric-style contribution calendar SVG
This script creates a beautiful isometric calendar visualization
"""

import random
from datetime import datetime, timedelta

def generate_contribution_data(days=365):
    """Generate random contribution data for demonstration"""
    data = []
    today = datetime.now()
    
    for i in range(days):
        date = today - timedelta(days=days - i - 1)
        # Generate realistic contribution pattern
        # Higher activity on weekdays, lower on weekends
        is_weekend = date.weekday() >= 5
        base_contributions = random.randint(0, 5) if is_weekend else random.randint(2, 15)
        
        data.append({
            'date': date,
            'count': base_contributions,
            'level': min(4, base_contributions // 4) if base_contributions > 0 else 0
        })
    
    return data

def get_color_for_level(level):
    """Return color based on contribution level"""
    colors = {
        0: '#161b22',
        1: '#0e4429',
        2: '#006d32',
        3: '#26a641',
        4: '#39d353'
    }
    return colors.get(level, colors[0])

def create_isometric_svg(data, width=900, height=400):
    """Create an isometric-style SVG calendar"""
    
    # Calculate grid dimensions
    weeks = 52
    days_per_week = 7
    cell_size = 8
    gap = 2
    
    # Isometric transformation parameters
    angle = 30  # degrees
    scale_x = 0.866  # cos(30°)
    scale_y = 0.5    # sin(30°)
    
    svg_parts = []
    svg_parts.append(f'<svg width="{width}" height="{height}" xmlns="http://www.w3.org/2000/svg">')
    svg_parts.append(f'<rect width="{width}" height="{height}" fill="#0d1117"/>')
    
    # Add gradient definitions
    svg_parts.append('''
    <defs>
        <filter id="glow">
            <feGaussianBlur stdDeviation="2" result="coloredBlur"/>
            <feMerge>
                <feMergeNode in="coloredBlur"/>
                <feMergeNode in="SourceGraphic"/>
            </feMerge>
        </filter>
    </defs>
    ''')
    
    # Calculate starting position
    start_x = width * 0.2
    start_y = height * 0.3
    
    # Group data by week
    week_data = [data[i:i+7] for i in range(0, len(data), 7)]
    
    # Render each cell
    for week_idx, week in enumerate(week_data[:weeks]):
        for day_idx, day in enumerate(week):
            # Calculate isometric position
            x = start_x + (week_idx * (cell_size + gap) * scale_x) - (day_idx * (cell_size + gap) * scale_x)
            y = start_y + (week_idx * (cell_size + gap) * scale_y) + (day_idx * (cell_size + gap) * scale_y)
            
            color = get_color_for_level(day['level'])
            
            # Create isometric cube faces
            # Top face
            top_points = f"{x},{y} {x + cell_size * scale_x},{y + cell_size * scale_y} {x},{y + cell_size} {x - cell_size * scale_x},{y + cell_size * scale_y}"
            
            # Create cell with hover effect
            svg_parts.append(f'''
            <g class="day" opacity="0.9">
                <polygon points="{top_points}" fill="{color}" stroke="#36BCF7" stroke-width="0.3" filter="url(#glow)">
                    <title>{day['date'].strftime('%Y-%m-%d')}: {day['count']} contributions</title>
                </polygon>
            </g>
            ''')
    
    # Add title
    svg_parts.append(f'''
    <text x="{width/2}" y="40" font-family="Arial, sans-serif" font-size="24" fill="#36BCF7" text-anchor="middle" font-weight="bold">
        📅 Contribution Activity
    </text>
    ''')
    
    # Add legend
    legend_y = height - 50
    legend_x = width * 0.3
    svg_parts.append(f'<text x="{legend_x}" y="{legend_y}" font-family="Arial" font-size="12" fill="#C9D1D9">Less</text>')
    
    for i in range(5):
        color = get_color_for_level(i)
        rect_x = legend_x + 40 + (i * 20)
        svg_parts.append(f'<rect x="{rect_x}" y="{legend_y - 12}" width="15" height="15" fill="{color}" stroke="#36BCF7" stroke-width="0.5" rx="2"/>')
    
    svg_parts.append(f'<text x="{legend_x + 150}" y="{legend_y}" font-family="Arial" font-size="12" fill="#C9D1D9">More</text>')
    
    # Calculate and display stats
    total = sum(d['count'] for d in data)
    svg_parts.append(f'''
    <text x="{width - 150}" y="{height - 60}" font-family="Arial" font-size="14" fill="#36BCF7" font-weight="bold">
        Total: {total} contributions
    </text>
    ''')
    
    svg_parts.append('</svg>')
    
    return '\n'.join(svg_parts)

def main():
    """Main function to generate and save SVG"""
    print("Generating isometric contribution calendar...")
    
    # Generate data
    data = generate_contribution_data(365)
    
    # Create SVG
    svg_content = create_isometric_svg(data)
    
    # Save to file
    output_file = 'contribution-calendar.svg'
    with open(output_file, 'w') as f:
        f.write(svg_content)
    
    print(f"Calendar saved to {output_file}")
    
    # Print stats
    total = sum(d['count'] for d in data)
    max_day = max(data, key=lambda x: x['count'])
    print(f"\nStats:")
    print(f"Total contributions: {total}")
    print(f"Max contributions in a day: {max_day['count']} on {max_day['date'].strftime('%Y-%m-%d')}")

if __name__ == '__main__':
    main()
