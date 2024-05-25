from django.urls import path
from . import views

urlpatterns = [
    path('', views.main, name='main'),
    path('members/', views.members, name='members'),
    path('members/details/<int:id>', views.details, name='details'),
    path('mods/', views.mods, name='mods'),
    path('mods/details/<int:id>', views.moddetails, name='mod_details'),
]
