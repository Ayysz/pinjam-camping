<div class="card shadow-sm">
    @if($image && filter_var($image, FILTER_VALIDATE_URL))
        <img src="{{ $image }}" alt="{{ $title }}" class="card-img-top" height="225" style="object-fit: cover;">
    @else
        <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225"
            preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
            <title>{{ $title }}</title>
            <rect width="100%" height="100%" fill="{{ $image }}"></rect>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $title }}</text>
        </svg>
    @endif
    <div class="card-body">
        <p class="card-text">
            <code>Ini dummy description text dari seeder dan factory barang</code>
            <strong>{{ $title }}</strong>
            <code>kategory</code>
            <em>{{ $category }}</em>
            <code>{{ $text }}</code>
        </p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                    <a href="/camp-gear/{{ $id }}" class="btn btn-sm btn-outline-danger">Lihat Detail</a>
            </div>
            <small class="text-body-secondary">Rp. {{ $price }}</small>
        </div>
    </div>
</div>
