<?php

namespace App\Exports;

use App\Artikal;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class ArtikalsExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Artikal::query();
    }

    public function map($artikli): array
    {
        return [

            $artikli->id,
            $artikli->nazivArtikla,
            $artikli->cijenaArtikla,
            $artikli->etiketa->cijenaEtikete,

        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Naziv artikla',
            'Cijena artikla',
            'Cijena etikete',
        ];
    }

}
