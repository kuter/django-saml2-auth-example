import factory

from .models import Post


class PostFactory(factory.django.DjangoModelFactory):
    """DjangoModelFactory for object Post."""
    title = factory.Faker('sentence', nb_words=4)
    body = factory.Faker('text')


    class Meta:
        model = Post
