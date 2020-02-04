@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-4 md:py-6">
    <div class="flex flex-col-reverse mb-6 lg:flex-row lg:mb-6">
        <div class="mt-4">
            <h1 id="intro-docs-template">Materials Commons</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Give your research a boost with Materials Commons. <br class="hidden sm:block">Store
                your results and workflow. Easily share with colleagues or publish online.</p>

            <div class="flex my-10">
                <a href="/public" title="About Materials Commons"
                   class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">
                    View Published Datasets
                </a>

                <a href="/docs/getting-started" title="Materials Commons getting started"
                   class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">
                    Read The Docs
                </a>

                <a href="/about" title="About Materials Commons"
                   class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">
                    About Materials Commons
                </a>
            </div>
        </div>

        <img src="/assets/img/logo-large.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">

            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">Access Anywhere</h3>

            <p>The Materials Commons website gives you access to your research anywhere you have an internet connection.</p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">

            <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">Powerful Command Line Tool</h3>

            <p>If you prefer to work from the command prompt we've got you covered! Materials Commons comes with a
                powerful command line tool and a Python API that allows you to write scripts to automate
                processes. </p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">

            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Store. Share. Publish.</h3>

            <p>Storing your data on Materials Commons gives you access to tools for annotating your data, sharing it
                with others, and publishing
                datasets the community can easily find.</p>
        </div>
    </div>
</section>
@endsection
