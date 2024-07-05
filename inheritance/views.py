from django.shortcuts import render

# Create your views here.
def i(request):
  return render(request, 'i.html')
def a(request):
  return render(request, 'a.html')  
def s(request):
  return render(request, 's.html')