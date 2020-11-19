from django.contrib.auth.decorators import login_required

from django.views.generic import ListView

from .models import Post


class PostListView(ListView):
    model = Post
