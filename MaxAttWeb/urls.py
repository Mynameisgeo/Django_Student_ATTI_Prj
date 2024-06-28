from MaxAttWeb import views

from django.urls import path, include

urlpatterns = [
    
    path('home.html', views.home, name='home'),
]
