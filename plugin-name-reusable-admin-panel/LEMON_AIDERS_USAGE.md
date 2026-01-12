# Lemon-Aiders Shortcode Guide

## What is a Shortcode?

A shortcode is a small piece of code in square brackets `[like_this]` that WordPress replaces with dynamic content when the page is displayed. Think of it as a placeholder that WordPress fills in automatically.

## The lemon_aiders Shortcode

This plugin includes a simple shortcode that displays "Hello, Lemon-Aiders!" on your website.

### Shortcode Syntax

```
[lemon_aiders]
```

---

## Step-by-Step Instructions

### Step 1: Install and Activate the Plugin

1. Log in to your WordPress admin dashboard (usually at `yoursite.com/wp-admin`)
2. Go to **Plugins** → **Installed Plugins** in the left sidebar
3. Find "WordPress Plugin Boilerplate with Reusable Admin Panel" in the list
4. Click the **Activate** link under the plugin name
5. You should see a "Plugin activated" message

### Step 2: Create a New Page (or Edit an Existing One)

#### To create a new page:
1. In the WordPress admin sidebar, go to **Pages** → **Add New**
2. Give your page a title (e.g., "Lemon Aiders Test")

#### To edit an existing page:
1. Go to **Pages** → **All Pages**
2. Hover over the page you want to edit and click **Edit**

### Step 3: Add the Shortcode

#### Using the Block Editor (Gutenberg) - Default in WordPress 5.0+

1. Click the **+** button to add a new block
2. Search for "Shortcode" in the block search box
3. Click on the **Shortcode** block to add it
4. In the shortcode block, type: `[lemon_aiders]`

#### Using the Classic Editor

1. Place your cursor where you want the text to appear
2. Simply type: `[lemon_aiders]`

### Step 4: Preview or Publish

1. Click the **Preview** button (top right) to see how it looks
2. If you're happy with it, click **Publish** (for new pages) or **Update** (for existing pages)

### Step 5: View Your Page

1. Click **View Page** or visit the page URL
2. You should see "Hello, Lemon-Aiders!" displayed where you placed the shortcode

---

## Troubleshooting

### The shortcode shows as plain text `[lemon_aiders]`

**Cause**: The plugin is not activated.

**Solution**: Go to **Plugins** → **Installed Plugins** and make sure the plugin is activated.

### Nothing appears where I placed the shortcode

**Cause**: There might be a typo in the shortcode.

**Solution**: Make sure you typed it exactly as `[lemon_aiders]` with:
- Square brackets `[ ]`
- An underscore `_` (not a hyphen)
- All lowercase letters

### I see an error message

**Cause**: There may be a plugin conflict or PHP error.

**Solution**: 
1. Check if WP_DEBUG is enabled in your `wp-config.php`
2. Look at the error log in `wp-content/debug.log`
3. Try deactivating other plugins to check for conflicts

---

## Where to Place Shortcodes

You can use `[lemon_aiders]` in:

| Location | How to Add |
|----------|------------|
| **Pages** | Edit the page and add the shortcode block |
| **Posts** | Edit the post and add the shortcode block |
| **Widgets** | Add a "Text" or "Shortcode" widget in **Appearance** → **Widgets** |
| **Theme files** | Use `<?php echo do_shortcode('[lemon_aiders]'); ?>` |

---

## Example Output

When you add `[lemon_aiders]` to your page content:

**What you type:**
```
Welcome to my website!

[lemon_aiders]

Thanks for visiting!
```

**What visitors see:**
```
Welcome to my website!

Hello, Lemon-Aiders!

Thanks for visiting!
```

---

## Implementation Details

- **Plugin**: WordPress Plugin Boilerplate with Reusable Admin Panel
- **Class**: `Company\Plugin_Name\Frontend\Display`
- **Method**: `display_lemon_aiders()`
- **Hook**: Registered on WordPress `init` action
