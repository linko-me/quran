from playwright.sync_api import sync_playwright

def run(playwright):
    browser = playwright.chromium.launch(headless=True)
    page = browser.new_page()

    # Home page
    page.goto("http://0.0.0.0:8000/")
    page.screenshot(path="jules-scratch/verification/design_01_home.png")

    # Surahs page
    page.goto("http://0.0.0.0:8000/surahs")
    page.screenshot(path="jules-scratch/verification/design_02_surahs.png")

    # Juzs page
    page.goto("http://0.0.0.0:8000/juzs")
    page.screenshot(path="jules-scratch/verification/design_03_juzs.png")

    # Surah viewer
    page.goto("http://0.0.0.0:8000/surah/1")
    page.screenshot(path="jules-scratch/verification/design_04_surah_viewer.png")

    # Juz viewer
    page.goto("http://0.0.0.0:8000/juz/1")
    page.screenshot(path="jules-scratch/verification/design_05_juz_viewer.png")

    # Login page
    page.goto("http://0.0.0.0:8000/login")
    page.screenshot(path="jules-scratch/verification/design_06_login.png")

    # Signup page
    page.goto("http://0.0.0.0:8000/signup")
    page.screenshot(path="jules-scratch/verification/design_07_signup.png")

    browser.close()

with sync_playwright() as playwright:
    run(playwright)
