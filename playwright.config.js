// playwright.config.js
const { defineConfig } = require('@playwright/test');

module.exports = defineConfig({
  use: {
    baseURL: 'http://localhost:8000',
    headless: true, // Explicitly set headless mode
  },
  webServer: {
    // We use index.php as a router script to handle SEO-friendly URLs.
    // This is more reliable than trying to use .htaccess with the built-in server.
    command: 'php -S 0.0.0.0:8000 index.php',
    url: 'http://localhost:8000',
    reuseExistingServer: !process.env.CI,
    timeout: 120 * 1000,
  },
  projects: [
    {
      name: 'chromium',
      use: { browserName: 'chromium' },
    },
  ],
});
