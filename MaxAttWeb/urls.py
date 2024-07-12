from MaxAttWeb import views

from django.urls import path, include

urlpatterns = [
    
    path('maxhome/', views.maxhome, name='maxhome'),
    path('about/', views.about, name='about'),

]
