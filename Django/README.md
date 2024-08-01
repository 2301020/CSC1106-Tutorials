# CSC1106 Tutorial Django 

## Step 0: Prerequisites
- Install Python and PIP (https://www.python.org/)
- Install Django: ```py -m pip install Django``` 
- One issue I encountered was also a missing 'django-bootstrap-v5' dependency, run ```pip install django-bootstrap-v5``` to install it
- Alternatively, you can try using the requirements.txt file to download the depencies by running ```pip install -r requirements.txt``` in the directory with 'requirements.txt'
- Another issue I encoutered was being unable to get 'python'/'py' running in the virtual environment, the solution to this was to change the pathway to the python executable in pyvenv.cfg (change the home=)
- If you need to modify the models, you will also need to migate them, navigate to the /my_tennis_club directory and run ```py manage.py makemigrations members```

## Step 1: Run Application

Run ```python manage.py runserver``` in the ..\my_tennis_club directory