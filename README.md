<!-- ─────────────────────────────  HEADER  ───────────────────────────── -->

<div align="center">
  <img src="https://readme-typing-svg.demolab.com?font=JetBrains+Mono&weight=800&size=38&duration=2800&pause=1000&color=00F7F7&center=true&vCenter=true&width=720&height=80&lines=%3E+hey%2C+i'm+mediumwarrior67;%3E+i+build+%2B+break+things;%3E+mostly+on+purpose" alt="intro" />
</div>

<br>

<!-- ─────────────────────────────  WHOAMI  ───────────────────────────── -->

```ts
const me = {
  role:     "full-stack dev",
  current:  "shipping side projects faster than i can name them",
  learning: "whatever's interesting this week",
  ask_me:   ["web", "servers", "weird api integrations"],
  motto:    "ship it. fix it tomorrow."
};
```

<!-- ─────────────────────────────  STACK  ───────────────────────────── -->

### `~/ stack`

<table>
  <tr>
    <td align="center" width="90"><img src="https://cdn.simpleicons.org/typescript/3178C6" width="36" /><br><sub>ts</sub></td>
    <td align="center" width="90"><img src="https://cdn.simpleicons.org/react/61DAFB" width="36" /><br><sub>react</sub></td>
    <td align="center" width="90"><img src="https://cdn.simpleicons.org/nextdotjs/white" width="36" /><br><sub>next</sub></td>
    <td align="center" width="90"><img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" width="36" /><br><sub>tailwind</sub></td>
    <td align="center" width="90"><img src="https://cdn.simpleicons.org/nodedotjs/339933" width="36" /><br><sub>node</sub></td>
    <td align="center" width="90"><img src="https://cdn.simpleicons.org/python/3776AB" width="36" /><br><sub>python</sub></td>
  </tr>
  <tr>
    <td align="center" width="90"><img src="https://cdn.simpleicons.org/postgresql/4169E1" width="36" /><br><sub>postgres</sub></td>
    <td align="center" width="90"><img src="https://cdn.simpleicons.org/mongodb/47A248" width="36" /><br><sub>mongo</sub></td>
    <td align="center" width="90"><img src="https://cdn.simpleicons.org/docker/2496ED" width="36" /><br><sub>docker</sub></td>
    <td align="center" width="90"><img src="https://cdn.simpleicons.org/amazonwebservices/FF9900" width="36" /><br><sub>aws</sub></td>
    <td align="center" width="90"><img src="https://cdn.simpleicons.org/git/F05032" width="36" /><br><sub>git</sub></td>
    <td align="center" width="90"><img src="https://cdn.simpleicons.org/linux/FCC624" width="36" /><br><sub>linux</sub></td>
  </tr>
</table>

<!-- ─────────────────────────────  STATS  ───────────────────────────── -->

### `~/ stats`

<div align="center">
  <img src="https://github-readme-stats.vercel.app/api?username=mediumwarrior67&show_icons=true&hide_border=true&count_private=true&include_all_commits=true&bg_color=0D1117&title_color=00F7F7&text_color=c9d1d9&icon_color=00F7F7&hide=contribs" height="165" />
  <img src="https://streak-stats.demolab.com?user=mediumwarrior67&hide_border=true&background=0D1117&stroke=00F7F7&ring=00F7F7&fire=00F7F7&currStreakLabel=00F7F7&sideLabels=c9d1d9&dates=c9d1d9&currStreakNum=c9d1d9&sideNums=c9d1d9" height="165" />
</div>

<div align="center">
  <img src="https://github-readme-stats.vercel.app/api/top-langs/?username=mediumwarrior67&layout=compact&hide_border=true&bg_color=0D1117&title_color=00F7F7&text_color=c9d1d9&langs_count=8&card_width=480" height="165" />
</div>

<!-- ─────────────────────────────  SNAKE  ───────────────────────────── -->

### `~/ contributions`

<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/mediumwarrior67/mediumwarrior67/output/github-contribution-grid-snake-dark.svg" />
  <source media="(prefers-color-scheme: light)" srcset="https://raw.githubusercontent.com/mediumwarrior67/mediumwarrior67/output/github-contribution-grid-snake.svg" />
  <img alt="snake eating contributions" src="https://raw.githubusercontent.com/mediumwarrior67/mediumwarrior67/output/github-contribution-grid-snake.svg" />
</picture>

<!-- ─────────────────────────────  ACTIVITY  ───────────────────────────── -->

### `~/ activity`

[![activity graph](https://github-readme-activity-graph.vercel.app/graph?username=mediumwarrior67&bg_color=0D1117&color=00F7F7&line=00F7F7&point=ffffff&area=true&hide_border=true&custom_title=commits%20over%20time)](https://github.com/mediumwarrior67)

<!-- ─────────────────────────────  CONTACT  ───────────────────────────── -->

### `~/ find me`

<a href="mailto:your.email@example.com"><img src="https://img.shields.io/badge/-email-D14836?style=for-the-badge&logo=gmail&logoColor=white" /></a>
<a href="https://linkedin.com/in/yourprofile"><img src="https://img.shields.io/badge/-linkedin-0077B5?style=for-the-badge&logo=linkedin&logoColor=white" /></a>
<a href="https://twitter.com/yourhandle"><img src="https://img.shields.io/badge/-twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white" /></a>

<br>

---

<div align="center">
  <sub>⚡ <i>"the best code is the code that ships"</i></sub>
</div>

<!-- ─────────────────────────────  SETUP NOTE  ───────────────────────────── -->

<details>
<summary><sub>⚙️ snake animation setup (one-time)</sub></summary>

<br>

The snake gif needs a tiny GitHub Action to regenerate itself. In your `mediumwarrior67/mediumwarrior67` repo:

1. Create the file `.github/workflows/snake.yml`
2. Paste this in:

```yaml
name: generate snake

on:
  schedule:
    - cron: "0 */6 * * *"
  workflow_dispatch:
  push:
    branches: [main]

jobs:
  generate:
    runs-on: ubuntu-latest
    steps:
      - uses: Platane/snk/svg-only@v3
        with:
          github_user_name: ${{ github.repository_owner }}
          outputs: |
            dist/github-contribution-grid-snake.svg
            dist/github-contribution-grid-snake-dark.svg?palette=github-dark&color_snake=#00F7F7&color_dots=#0D1117,#0E4429,#006D32,#26A641,#39D353

      - uses: crazy-max/ghaction-github-pages@v3
        with:
          target_branch: output
          build_dir: dist
        env:
          GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```

3. Go to the **Actions** tab → "generate snake" → **Run workflow** once to seed it. After that it auto-regenerates every 6 hours.

</details>
