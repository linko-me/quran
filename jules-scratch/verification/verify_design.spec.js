const { test, expect } = require('@playwright/test');

test.describe('Quran Web App - Design Verification', () => {

  test('should have a modern hero section on the homepage', async ({ page }) => {
    await page.goto('/');
    await page.screenshot({ path: 'jules-scratch/verification/design_01_homepage.png' });
    const heroTitle = await page.locator('.hero h1').textContent();
    expect(heroTitle).toContain('Read, Search, and Listen to the Quran');
  });

  test('should have a well-styled Surahs listing page', async ({ page }) => {
    await page.goto('/surahs');
    await page.waitForSelector('.card');
    await page.screenshot({ path: 'jules-scratch/verification/design_02_surahs.png' });
    const firstCardTitle = await page.locator('.card-title').first().textContent();
    // The API returns the Arabic name, so we assert against that.
    expect(firstCardTitle).toContain('سُورَةُ ٱلْفَاتِحَةِ');
  });

  test('should have a well-styled Juzs listing page', async ({ page }) => {
    await page.goto('/juzs');
    await page.waitForSelector('.card');
    await page.screenshot({ path: 'jules-scratch/verification/design_03_juzs.png' });
    const firstCardTitle = await page.locator('.card-title').first().textContent();
    expect(firstCardTitle).toContain('Juz 1');
  });
});
