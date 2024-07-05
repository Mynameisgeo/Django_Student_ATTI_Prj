from inheritance import views

from django.urls import path, include

urlpatterns = [
    
    path('', views.i, name='h'),
    path('a/', views.a, name='a'),
    path('s/', views.s ,name='s')
]
