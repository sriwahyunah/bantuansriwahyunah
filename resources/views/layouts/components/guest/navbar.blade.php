<nav class="navbar navbar-dark bg-primary">
    <div class="container">

        <a href="{{ url('/') }}"
            class="navbar-brand">

            Bantuan Sosial

        </a>

    </div>
</nav>

<button class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarNav">

    <span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse"
    id="navbarNav">

    <ul class="navbar-nav ms-auto">

        <li class="nav-item">

            <a class="nav-link"
                href="{{ url('/') }}">

                Home

            </a>

        </li>

        <li class="nav-item">

            <a class="nav-link"
                href="{{ route('login.user') }}">

                Login User

            </a>

        </li>

        <li class="nav-item">

            <a class="nav-link"
                href="{{ route('login.penerima') }}">

                Login Penerima

            </a>

        </li>

    </ul>

</div>

</div>

</nav>