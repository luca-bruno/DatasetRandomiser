from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait
import time

# 291 actions for 1/6
for i in range(291): 
    browser = webdriver.Chrome('E:\\xampp\\htdocs\\datasetRandomiser\\chromedriver.exe')
    browser.maximize_window()
    browser.get("http://localhost/datasetRandomiser/datasetRandomiser.php")

    buttonFinder = browser.find_element_by_id("CaptureButton")
    buttonFinder.click()

    time.sleep(1)
    # wait = WebDriverWait( browser, 5000 )
    browser.close() 