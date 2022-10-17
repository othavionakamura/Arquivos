from time import sleep
import pyautogui
i = 0

pyautogui.keyDown('alt')
pyautogui.press(['tab'])
pyautogui.keyUp('alt')


while i < 40:
    pyautogui.write('')
    i = i + 1