# 📦 WORDPRESS THEME INSTALLATION GUIDE

## ⚠️ IMPORTANT: Correct File Structure

The WordPress theme files are located in the `wp-theme` folder. You need to install ONLY the contents of this folder, not the entire repository.

---

## 🎯 CORRECT INSTALLATION METHOD

### Method 1: Manual Installation (Recommended)

**Step 1: Download from GitHub**
1. Go to: https://github.com/dixitprakhar25/rishikesh-vedic
2. Click the green **Code** button
3. Click **Download ZIP**
4. Extract the ZIP file on your computer

**Step 2: Locate Theme Files**
1. Open the extracted folder
2. Navigate to: `rishikesh-vedic-main/wp-theme/`
3. You should see these files:
   ```
   wp-theme/
   ├── style.css
   ├── functions.php
   ├── index.php
   ├── header.php
   ├── footer.php
   ├── inc/
   │   ├── customizer.php
   │   ├── custom-post-types.php
   │   └── template-tags.php
   └── README.md
   ```

**Step 3: Create Theme ZIP**
1. Select ALL files inside the `wp-theme` folder (NOT the folder itself)
2. Right-click → **Compress** (Mac) or **Send to → Compressed folder** (Windows)
3. Name it: `rishikesh-vedic.zip`

**Step 4: Upload to WordPress**
1. Login to WordPress Admin
2. Go to **Appearance → Themes**
3. Click **Add New**
4. Click **Upload Theme**
5. Choose `rishikesh-vedic.zip`
6. Click **Install Now**
7. Click **Activate**

---

### Method 2: FTP Upload (Alternative)

**Step 1: Download & Extract**
1. Download repository from GitHub
2. Extract the ZIP file
3. Navigate to `rishikesh-vedic-main/wp-theme/`

**Step 2: Rename Folder**
1. Rename `wp-theme` folder to `rishikesh-vedic`

**Step 3: Upload via FTP**
1. Connect to your server via FTP (FileZilla, etc.)
2. Navigate to: `/wp-content/themes/`
3. Upload the `rishikesh-vedic` folder
4. Wait for upload to complete

**Step 4: Activate**
1. Go to WordPress Admin
2. **Appearance → Themes**
3. Find "Rishikesh Vedic"
4. Click **Activate**

---

## ✅ VERIFY INSTALLATION

After activation, you should see:
- Theme name: **Rishikesh Vedic**
- Version: **1.0.0**
- Author: **Rishikesh Vedic Team**

Go to **Appearance → Customize** and you should see:
- Theme Colors
- Typography
- Hero Section
- Layout Options
- Social Media Links
- Contact Information
- Footer Options

---

## 🚨 TROUBLESHOOTING

### Error: "The package could not be installed"

**Cause:** You're trying to install the entire repository instead of just the theme.

**Solution:**
1. Extract the downloaded ZIP
2. Go to `wp-theme` folder
3. Compress ONLY the contents (not the folder itself)
4. Upload the new ZIP

### Error: "Missing style.css stylesheet"

**Cause:** The ZIP structure is incorrect.

**Solution:**
The ZIP should contain:
```
rishikesh-vedic.zip
├── style.css (at root level)
├── functions.php
├── index.php
└── ...
```

NOT:
```
rishikesh-vedic.zip
└── wp-theme/
    ├── style.css
    └── ...
```

### Error: "Broken theme"

**Cause:** Missing required files.

**Solution:**
Ensure these files exist:
- `style.css` (required)
- `index.php` (required)
- `functions.php` (recommended)

### Theme shows but looks broken

**Cause:** Missing template files.

**Solution:**
1. Deactivate theme
2. Delete theme folder
3. Re-upload with all files
4. Activate again

---

## 📋 REQUIRED FILES CHECKLIST

Before uploading, verify these files exist:

**✅ Core Files (Required):**
- [ ] style.css
- [ ] index.php
- [ ] functions.php
- [ ] header.php
- [ ] footer.php

**✅ Inc Folder:**
- [ ] inc/customizer.php
- [ ] inc/custom-post-types.php
- [ ] inc/template-tags.php

**✅ Documentation:**
- [ ] README.md

---

## 🎯 QUICK FIX: Download Pre-Packaged Theme

I'll create a properly structured ZIP file for you.

**What you need:**
1. Only the `wp-theme` folder contents
2. Properly compressed as ZIP
3. With correct file structure

---

## 📞 STILL HAVING ISSUES?

**Check:**
1. WordPress version (5.8+)
2. PHP version (7.4+)
3. File permissions (755 for folders, 644 for files)
4. Server disk space

**Contact Support:**
- Email: support@rishikeshvedic.com
- Include: WordPress version, error message, screenshot

---

## ✨ AFTER SUCCESSFUL INSTALLATION

1. **Install Elementor Plugin**
   - Plugins → Add New
   - Search "Elementor"
   - Install & Activate

2. **Customize Theme**
   - Appearance → Customize
   - Change colors, fonts, hero section

3. **Create Pages**
   - Pages → Add New
   - Edit with Elementor
   - Drag & drop elements

4. **Add Astrologers**
   - Astrologers → Add New
   - Fill in details
   - Upload photo

---

**Need the theme files in correct structure? Let me know and I'll create a downloadable package!**