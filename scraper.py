from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait
import time


for i in range(3): 
    browser = webdriver.Chrome('E:\\xampp\\htdocs\\datasetRandomiser\\chromedriver.exe')
    browser.maximize_window()
    browser.get("http://localhost/datasetRandomiser/datasetRandomiser.php")

    buttonFinder = browser.find_element_by_id("CaptureButton")
    buttonFinder.click()

    time.sleep(1)
    # wait = WebDriverWait( browser, 5000 )
    browser.close() 