from django.shortcuts import render

# Create your views here.

def home(request):
    return render(request, "home.html")

def about(request):
    return render(request, "about.html")
def sale(request):
    return render(request, "sales.html")