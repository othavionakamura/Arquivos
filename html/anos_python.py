from time import sleep
import pyautogui
i = 0

pyautogui.keyDown('ctrl')
pyautogui.press(['tab'])
pyautogui.keyUp('ctrl')


while i < 30:
    pyautogui.write('acéfalo, ')
    i = i + 1