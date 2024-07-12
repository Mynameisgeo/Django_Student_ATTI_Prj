from django.shortcuts import render

# Create your views here.

def maxhome(request):
    return render(request, "maxhome.html")

def about(request):
    return render(request, "about.html")