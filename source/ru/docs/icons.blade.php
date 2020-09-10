---
title: Иконки
description:
extends: _layouts.documentation
section: main
lang: ru
githubEdit: false
---

@extends('_layouts.documentation')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group form-group-default">
                <label>Найти иконку</label>
                <div class="controls">
                    <input type="text"   id="quick-search"  placeholder="Поиск..." class="form-control">
                </div>
            </div>
        </div>

        <div class="row mt-3">
            @foreach($page->icons() as $icon)
                <div class="icon-preview-box col-xs-6 col-md-3 col-lg-3">
                    <div class="preview">
                        {!! $page->getIcon($icon) !!}
                        <span class="ml-2 name">{{$icon}}</span>
                    </div>
                </div>
            @endforeach
        </div>


        <p class="mt-5 text-muted">
            Исходный код находится на <a href="https://github.com/orchidsoftware/icons" target="_blank">github</a>
        </p>

    </div>
@endsection
