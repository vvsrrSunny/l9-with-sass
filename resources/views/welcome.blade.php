<!DOCTYPE html>

<x-layouts.app>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bharadwaj Varanasi (Sunny)</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarNavDropdown">
                    <ul class="navbar-nav row gap-2">
                        <li class="nav-item col">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item col-md-auto">
                            <a class="nav-link" href="#">My Current Work</a>
                        </li>

                        <li class="nav-item dropdown col">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Experience
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Pentanet</a></li>
                                <li><a class="dropdown-item" href="#">Hatchet</a></li>
                                <li><a class="dropdown-item" href="#">Kony</a></li>
                            </ul>
                        </li>

                        <li class="nav-item col">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

<x-home/>
</x-layouts.app>
