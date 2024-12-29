# Buggy Plugin

## Description

The **Buggy Plugin** is a WordPress plugin created for assessment purposes. When activated, it introduces a **critical error** due to a deliberate syntax issue. This plugin is intended to evaluate a candidate’s ability to identify and resolve errors, restoring the site’s functionality.

## Installation Instructions

1. Create a folder named `buggy-plugin` in the `/wp-content/plugins/` directory of your WordPress installation.
2. Save the provided `buggy-plugin.php` file into the `buggy-plugin` folder.
3. Activate the plugin from the WordPress admin dashboard to trigger the critical error.

## Expected Behavior

When this plugin is activated:
1. Both the frontend and backend of the WordPress site become inaccessible.
2. A critical error occurs due to invalid syntax in the `buggy_function()` function.
3. The issue can be identified by reviewing the error logs (e.g., `debug.log`) or inspecting the plugin code.

## Accepted Fixes

The candidate can resolve the issue by either:
1. **Correcting the syntax error** in the `buggy_function()` function.
   - Add the missing curly braces and fix the invalid syntax.
   - Example fixed code:
     ```php
     function buggy_function() {
         echo 'This will cause a critical error on activation';

         // Corrected syntax:
         if ( true ) {
             echo "Missing curly braces fixed";
         }
     }
     ```
2. **Disabling the plugin** by renaming its folder or manually deactivating it via the database or file system.

Both solutions demonstrate effective problem-solving skills and an understanding of troubleshooting WordPress issues.

## Purpose

The Buggy Plugin is intended to assess a candidate’s debugging skills by testing their ability to:
1. Identify the root cause of the critical error.
2. Use debugging tools effectively (e.g., `debug.log`, FTP access).
3. Implement a proper fix to restore site functionality, either by correcting the code or disabling the faulty plugin.

## Instructions for Assessors

1. Place the `buggy-plugin.php` file in the `/wp-content/plugins/buggy-plugin/` folder of the WordPress test environment.
2. Activate the plugin before the assessment begins to trigger the critical error.
3. Provide the candidate with access to debugging tools such as FTP or error logs.
4. Allow the candidate to troubleshoot and resolve the issue independently.

## Notes

- **Do not use this plugin on a live site.** It is designed to break WordPress functionality intentionally.
- Ensure the candidate has the necessary permissions and tools to troubleshoot the issue effectively.
- This plugin is for educational and assessment purposes only.

## License

This plugin is distributed under the [GPL2 License](https://www.gnu.org/licenses/gpl-2.0.html). It is free to use, modify, and distribute for non-production purposes.
