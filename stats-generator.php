<?php
/**
 * GitHub Profile Stats Generator
 * A PHP example showcasing server-side scripting skills
 */

header('Content-Type: text/html; charset=utf-8');

class GitHubStatsGenerator {
    private $username;
    private $languages = ['JavaScript', 'HTML', 'PHP', 'Python', 'CSS'];
    
    public function __construct($username) {
        $this->username = htmlspecialchars($username);
    }
    
    public function generateStats() {
        $stats = [
            'total_contributions' => rand(1000, 5000),
            'repos' => rand(20, 100),
            'stars' => rand(50, 500),
            'followers' => rand(10, 200)
        ];
        return $stats;
    }
    
    public function getLanguageBreakdown() {
        $breakdown = [];
        $total = 100;
        
        foreach ($this->languages as $lang) {
            $percentage = rand(10, 30);
            $breakdown[$lang] = min($percentage, $total);
            $total -= $breakdown[$lang];
        }
        
        return $breakdown;
    }
    
    public function generateHTML() {
        $stats = $this->generateStats();
        $languages = $this->getLanguageBreakdown();
        
        $html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub Stats - {$this->username}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0d1117 0%, #161b22 100%);
            color: #C9D1D9;
            padding: 40px;
            min-height: 100vh;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(22, 27, 34, 0.8);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(54, 188, 247, 0.1);
        }
        
        h1 {
            color: #36BCF7;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5em;
            text-shadow: 0 0 20px rgba(54, 188, 247, 0.5);
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .stat-card {
            background: linear-gradient(135deg, rgba(54, 188, 247, 0.1) 0%, rgba(54, 188, 247, 0.05) 100%);
            padding: 25px;
            border-radius: 15px;
            border: 1px solid rgba(54, 188, 247, 0.3);
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(54, 188, 247, 0.3);
        }
        
        .stat-value {
            font-size: 2.5em;
            color: #36BCF7;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .stat-label {
            color: #C9D1D9;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9em;
        }
        
        .languages-section {
            margin-top: 30px;
        }
        
        .language-title {
            color: #36BCF7;
            font-size: 1.5em;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .language-bar {
            margin-bottom: 15px;
        }
        
        .language-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            color: #C9D1D9;
        }
        
        .language-progress {
            height: 10px;
            background: rgba(54, 188, 247, 0.2);
            border-radius: 5px;
            overflow: hidden;
        }
        
        .language-progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #36BCF7 0%, #39d353 100%);
            box-shadow: 0 0 10px rgba(54, 188, 247, 0.5);
            transition: width 1s ease;
        }
        
        .php-badge {
            display: inline-block;
            background: #777BB4;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9em;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🐘 PHP Stats Generator</h1>
        <p style="text-align: center; margin-bottom: 30px; color: #C9D1D9;">
            <span class="php-badge">Generated with PHP</span>
        </p>
        
        <div class="stats-grid">
HTML;

        foreach ($stats as $label => $value) {
            $label_display = ucfirst(str_replace('_', ' ', $label));
            $html .= <<<STAT
            <div class="stat-card">
                <div class="stat-value">{$value}</div>
                <div class="stat-label">{$label_display}</div>
            </div>
STAT;
        }

        $html .= <<<HTML
        </div>
        
        <div class="languages-section">
            <div class="language-title">📊 Language Breakdown</div>
HTML;

        foreach ($languages as $lang => $percentage) {
            $html .= <<<LANG
            <div class="language-bar">
                <div class="language-header">
                    <span>{$lang}</span>
                    <span>{$percentage}%</span>
                </div>
                <div class="language-progress">
                    <div class="language-progress-fill" style="width: {$percentage}%;"></div>
                </div>
            </div>
LANG;
        }

        $html .= <<<HTML
        </div>
        
        <p style="text-align: center; margin-top: 40px; color: #36BCF7;">
            ✨ Powered by PHP | Generated on <?php echo date('Y-m-d H:i:s'); ?>
        </p>
    </div>
</body>
</html>
HTML;

        return $html;
    }
}

// Usage
$username = 'mediumwarrior67';
$generator = new GitHubStatsGenerator($username);
echo $generator->generateHTML();
?>
