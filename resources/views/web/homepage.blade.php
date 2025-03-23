<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <h3 class="text-center mb-3">Selamat Datang di Website Kami</h3>

    <div class="row">
        <div class="col-md-3 mb-2">
            <x-card 
                title="Es Teh" 
                description="Ini adalah Es Teh." 
                image="https://static.republika.co.id/uploads/member/images/news/240607073248-607.jpg" 
                link="" 
            />
        </div>

        <div class="col-md-3 mb-2">
            <x-card 
                title="Es Buah" 
                description="Ini adalah Es Buah." 
                image="https://asset.kompas.com/crops/yBjQaMDUt9M5kfPDN_c1fr5dW1Q=/154x71:954x604/750x500/data/photo/2023/05/16/6462f0a93b31b.jpg" 
                link="" 
            />
        </div>

        <div class="col-md-3 mb-2">
            <x-card 
                title="Es Podeng" 
                description="Ini adalah Es Podeng." 
                image="https://www.primarasa.co.id/images/images/es%20podeng%281%29.jpg" 
                link="" 
            />
        </div>

        <div class="col-md-3 mb-2">
            <x-card 
                title="Es Kelapa" 
                description="Ini adalah Kelapa." 
                image="https://asset.kompas.com/crops/ybD-37ovPjqbsQLdxhOF8NOBmQU=/0x0:739x493/1200x800/data/photo/2020/01/29/5e3187c1ac05f.jpg" 
                link="" 
            />
        </div>
    </div>

    <x-alert type="success" title="Berhasil!">
        Selamat, data berhasil dimuat!
    </x-alert>
    
</x-layout>