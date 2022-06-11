
@extends('user.components.main')

@section('content')
<div class="flex flex-col">
  {{-- map --}}
   <div id="map" class="w-full md:h-96 h-60 rounded-md my-3"></div>

   <h2 class="text-center text-xl mt-3">Daftar IPWL Kemensos</h2>
   <div class="accordion" id="accordionExample5">  
      <div class="accordion-item bg-white border border-gray-200">
        <h2 class="accordion-header mb-0" id="headingTwo5">
          <button class="
            accordion-button
            collapsed
            relative
            flex
            items-center
            w-full
            py-4
            px-5
            text-base text-gray-800 text-left
            bg-white
            border-0
            rounded-none
            transition
            focus:outline-none
          " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo5" aria-expanded="false"
            aria-controls="collapseTwo5">
            NANGGROE ACEH DARUSALAM
          </button>
        </h2>
        <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
          <div class="accordion-body py-4 px-5">
            <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
              @foreach ($NAD as $location)
              <div class="accordion-body py-4 px-5 border-b-2">
                <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    {{--  --}}

    <div class="accordion-item bg-white border border-gray-200">
      <h2 class="accordion-header mb-0" id="headingThree5">
        <button class="
          accordion-button
          collapsed
          relative
          flex
          items-center
          w-full
          py-4
          px-5
          text-base text-gray-800 text-left
          bg-white
          border-0
          rounded-none
          transition
          focus:outline-none
        " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false"
          aria-controls="collapseThree5">
          SUMATERA UTARA
        </button>
      </h2>
      <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
        <div class="accordion-body py-4 px-5">
          <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
            @foreach ($SUMUT as $location)
            <div class="accordion-body py-4 px-5 border-b-2">
              <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingfour5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour5" aria-expanded="false"
              aria-controls="collapsefour5">
              RIAU
            </button>
          </h2>
          <div id="collapsefour5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($RIAU as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingFive5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive5" aria-expanded="false"
              aria-controls="collapseFive5">
             KEPULAUAN RIAU
            </button>
          </h2>
          <div id="collapseFive5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($KEPULAUANRIAU as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingSix5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix5" aria-expanded="false"
              aria-controls="collapseSix5">
             BANGKA BELITUNG
            </button>
          </h2>
          <div id="collapseSix5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($BANGKABELITUNG as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingSeven5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven5" aria-expanded="false"
              aria-controls="collapseSeven5">
             SUMATERA BARAT
            </button>
          </h2>
          <div id="collapseSeven5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($SUMBAR as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingEight5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight5" aria-expanded="false"
              aria-controls="collapseEight5">
             JAMBI
            </button>
          </h2>
          <div id="collapseEight5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($JAMBI as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>


        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingNine5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine5" aria-expanded="false"
              aria-controls="collapseNine5">
             SUMATERA SELATAN
            </button>
          </h2>
          <div id="collapseNine5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($SUMSEL as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingTen5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen5" aria-expanded="false"
              aria-controls="collapseTen5">
             BENGKULU
            </button>
          </h2>
          <div id="collapseTen5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($BENGKULU as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingEleven5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven5" aria-expanded="false"
              aria-controls="collapseEleven5">
             LAMPUNG
            </button>
          </h2>
          <div id="collapseEleven5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($LAMPUNG as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingTweleve5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTweleve5" aria-expanded="false"
              aria-controls="collapseTweleve5">
             DKI JAKARTA
            </button>
          </h2>
          <div id="collapseTweleve5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($DKIJAKARTA as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingThirteen5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen5" aria-expanded="false"
              aria-controls="collapseThirteen5">
             BANTEN
            </button>
          </h2>
          <div id="collapseThirteen5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($BANTEN as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingFourteen5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen5" aria-expanded="false"
              aria-controls="collapseFourteen5">
             JAWA BARAT
            </button>
          </h2>
          <div id="collapseFourteen5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($JABAR as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingFiveteen5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveteen5" aria-expanded="false"
              aria-controls="collapseFiveteen5">
             JAWA TENGAH
            </button>
          </h2>
          <div id="collapseFiveteen5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($JATENG as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingSixteen5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen5" aria-expanded="false"
              aria-controls="collapseSixteen5">
             DI YOGYAKARTA
            </button>
          </h2>
          <div id="collapseSixteen5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($DIY as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingSeventeen5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen5" aria-expanded="false"
              aria-controls="collapseSeventeen5">
             JAWA TIMUR
            </button>
          </h2>
          <div id="collapseSeventeen5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($JATIM as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingEighteen5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen5" aria-expanded="false"
              aria-controls="collapseEighteen5">
             BALI
            </button>
          </h2>
          <div id="collapseEighteen5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($BALI as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingNineteen5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen5" aria-expanded="false"
              aria-controls="collapseNineteen5">
             NUSA TENGGARA BARAT
            </button>
          </h2>
          <div id="collapseNineteen5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($NTB as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingTwentySeven5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty5" aria-expanded="false"
              aria-controls="collapseTwenty5">
             NUSA TENGGARA TIMUR
            </button>
          </h2>
          <div id="collapseTwenty5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($NTT as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingTwentyoneSeven5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyone5" aria-expanded="false"
              aria-controls="collapseTwentyone5">
             KALIMANTAN BARAT
            </button>
          </h2>
          <div id="collapseTwentyone5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($KALBAR as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingTwentytwo5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentytwo5" aria-expanded="false"
              aria-controls="collapseTwentytwo5">
             KALIMANTAN SELATAN
            </button>
          </h2>
          <div id="collapseTwentytwo5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($KALSEL as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingTwentythree5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentythree5" aria-expanded="false"
              aria-controls="collapseTwentythree5">
              KALIMANTAN TENGAH
            </button>
          </h2>
          <div id="collapseTwentythree5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($KALTENG as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingTwentyfour5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyfour5" aria-expanded="false"
              aria-controls="collapseTwentyfour5">
             KALIMANTAN TIMUR
            </button>
          </h2>
          <div id="collapseTwentyfour5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($KALTIM as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingTwentyfive5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyfive5" aria-expanded="false"
              aria-controls="collapseTwentyfive5">
            KALIMANTAN UTARA
            </button>
          </h2>
          <div id="collapseTwentyfive5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($KALUT as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingTwentysix5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentysix5" aria-expanded="false"
              aria-controls="collapseTwentysix5">
             SULAWESI BARAT
            </button>
          </h2>
          <div id="collapseTwentysix5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($SULBAR as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingTwentyseven5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyseven5" aria-expanded="false"
              aria-controls="collapseTwentyseven5">
             SULAWESI UTARA
            </button>
          </h2>
          <div id="collapseTwentyseven5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($SULUT as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingTwentyeight5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyeight5" aria-expanded="false"
              aria-controls="collapseTwentyeight5">
             SULAWESI SELATAN
            </button>
          </h2>
          <div id="collapseTwentyeight5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($SULSEL as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingTwentynine5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentynine5" aria-expanded="false"
              aria-controls="collapseTwentynine5">
             SULAWESI TENGAH
            </button>
          </h2>
          <div id="collapseTwentynine5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($SULTENG as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingThirtySeven5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirty5" aria-expanded="false"
              aria-controls="collapseThirty5">
             SULAWESI TENGGARA
            </button>
          </h2>
          <div id="collapseThirty5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($SULTENGG as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingThirtyone5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyone5" aria-expanded="false"
              aria-controls="collapseThirtyone5">
             GORONTALO
            </button>
          </h2>
          <div id="collapseThirtyone5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($GORONTALO as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingSevenThirtytwo5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtytwo5" aria-expanded="false"
              aria-controls="collapseThirtytwo5">
             MALUKU
            </button>
          </h2>
          <div id="collapseThirtytwo5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($MALUKU as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingThirtythree5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtythree5" aria-expanded="false"
              aria-controls="collapseThirtythree5">
             MALUKU UTARA
            </button>
          </h2>
          <div id="collapseThirtythree5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($MALUT as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingThiryfour5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThiryfour5" aria-expanded="false"
              aria-controls="collapseThiryfour5">
             PAPUA
            </button>
          </h2>
          <div id="collapseThiryfour5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($PAPUA as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        {{--  --}}
        <div class="accordion-item bg-white border border-gray-200">
          <h2 class="accordion-header mb-0" id="headingThirtyfive5">
            <button class="
              accordion-button
              collapsed
              relative
              flex
              items-center
              w-full
              py-4
              px-5
              text-base text-gray-800 text-left
              bg-white
              border-0
              rounded-none
              transition
              focus:outline-none
            " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyfive5" aria-expanded="false"
              aria-controls="collapseThirtyfive5">
             PAPUA BARAT
            </button>
          </h2>
          <div id="collapseThirtyfive5" class="accordion-collapse collapse" aria-labelledby="headingThree5">
            <div class="accordion-body py-4 px-5">
              <div id="collapseOne5" class="accordion-collapse collapse show " aria-labelledby="headingOne5">
                @foreach ($PAPUABARAT as $location)
                <div class="accordion-body py-4 px-5 border-b-2">
                  <strong>{{ $location->nama }}</strong> | {{ $location->alamat }} | {{ $location->nama }} | {{ $location->email }} | {{ $location->kontak }}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
  </div>
</div>


@endsection