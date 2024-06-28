from Dennis import views

from django.urls import path, include

urlpatterns = [
    
    path('', views.index_dennis, name='index_dennis'),
]
