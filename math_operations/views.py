from django.shortcuts import render
from .utils import math_form_view

def calculate(request):
    if request.method == "POST":
        x = int(request.POST.get("x"))
        y = int(request.POST.get("y"))
        z = int(request.POST.get("z"))

        context = math_form_view(x, y, z)
        return render(request, "result.html", context)

    return render(request, "math_form.html")
