from django.db import models

class Member(models.Model):
    firstname = models.CharField(max_length=255)
    lastname = models.CharField(max_length=255)
    phone = models.IntegerField(null=True)
    joined_date = models.DateField(null=True)

class Mods(models.Model):
    modname = models.CharField(max_length=255)
    taughtby = models.CharField(max_length=255)
    credits = models.IntegerField(null=True)