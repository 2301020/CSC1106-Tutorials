# Generated by Django 4.2.13 on 2024-05-25 08:29

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('members', '0002_member_joined_date_member_phone'),
    ]

    operations = [
        migrations.CreateModel(
            name='Mods',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('modname', models.CharField(max_length=255)),
                ('taughtby', models.CharField(max_length=255)),
                ('credits', models.IntegerField(null=True)),
            ],
        ),
    ]
