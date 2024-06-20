from Tr import views

from django.urls import path, include

urlpatterns = [
    
    path('', views.home, name='home'),
    path('about/', views.about, name='about'),
    path('sales/', views.sale, name='sale')
]
