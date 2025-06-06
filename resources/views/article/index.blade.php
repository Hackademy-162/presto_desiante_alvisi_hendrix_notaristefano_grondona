<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center text-center align-items-center heightCustom">
            <div class="col-12">
                <h1 class="display-1 title_m">{{__('ui.allArticles')}}</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5 heightCustom px-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">{{__('ui.noArticlesYet')}}</h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>
