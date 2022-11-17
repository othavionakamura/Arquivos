from time import sleep
import pyautogui
i = 0

pyautogui.keyDown('alt')
pyautogui.press(['tab'])
pyautogui.keyUp('alt')


while i < 150:
    pyautogui.write('Otário!')
    pyautogui.press('enter')
    i = i + 1