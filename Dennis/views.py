from django.shortcuts import render

# Create your views here.
def index_dennis(request):
    return render(request, 'index_dennis.html')