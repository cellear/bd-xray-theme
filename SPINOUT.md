# Spinning Out This Theme into a Separate Repository

This document outlines the steps to create a standalone repository for the Backdrop Outlined theme.

## Steps to Create Separate Repo

### 1. Create New GitHub Repository

1. Go to GitHub and create a new repository (e.g., `bd-xray-theme`)
2. **Do NOT** initialize with README, .gitignore, or license (we already have these)
3. Note the repository URL

### 2. Initialize Git in Theme Directory

```bash
cd /path/to/backdrop/themes/backdrop_outlined
git init
```

### 3. Add All Files

```bash
git add .
```

### 4. Make Initial Commit

```bash
git commit -m "Initial commit: Backdrop Outlined theme

- Visual outline theme for Backdrop CMS
- Shows regions, blocks, and nodes with colored borders
- Educational tool for understanding Backdrop structure
- Originated from wp4bd project development"
```

### 5. Add Remote and Push

```bash
git remote add origin https://github.com/cellear/bd-xray-theme.git
git branch -M main
git push -u origin main
```

### 6. Update README

After creating the repo, update the README.md:
- Replace `yourusername` with your actual GitHub username
- Update any placeholder URLs
- Add any additional project-specific information

## Files Included

The repository should include:
- ✅ `backdrop_outlined.info` - Theme definition
- ✅ `template.php` - Theme functions
- ✅ `css/style.css` - Styling
- ✅ `templates/` - All template files
- ✅ `README.md` - Documentation
- ✅ `LICENSE` - GPL v2
- ✅ `.gitignore` - Git ignore rules

## Repository Settings

Consider adding:
- **Topics/Tags**: `backdrop-cms`, `backdrop-theme`, `educational`, `development-tool`
- **Description**: "Visual outline theme for Backdrop CMS - shows regions, blocks, and structure"
- **Website**: Link to your wp4bd project if relevant
- **License**: GPL-2.0 (or later)

## Future Maintenance

Once spun out:
1. Update this theme independently from wp4bd
2. Accept contributions from the Backdrop community
3. Version releases (e.g., 1.0.0, 1.1.0)
4. Create releases/tags for stable versions
5. Add to Backdrop's theme directory if it gains traction

## Notes

- Keep this as a separate project from wp4bd
- Can reference wp4bd in history but maintain independence
- Consider adding to Backdrop's contributed themes list when ready

