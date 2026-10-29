<?php

namespace Tests\Feature;

use App\Models\Laporan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_banjir_report_can_be_submitted(): void
    {
        $response = $this->post('/laporan', [
            'nama_pelapor' => 'Ayu',
            'lokasi' => 'Desa Sukamaju',
            'tinggi_genangan' => 45,
            'tanggal_kejadian' => '2026-10-25',
        ]);

        $response->assertRedirect(route('laporan.create'));
        $this->assertDatabaseHas('laporan', [
            'nama_pelapor' => 'Ayu',
            'lokasi' => 'Desa Sukamaju',
            'tinggi_genangan' => 45,
            'tanggal_kejadian' => '2026-10-25',
        ]);
    }

    public function test_report_list_is_available_to_authenticated_users(): void
    {
        $this->actingAs(\App\Models\User::factory()->create());
        Laporan::create([
            'nama_pelapor' => 'Ayu',
            'lokasi' => 'Desa Sukamaju',
            'tinggi_genangan' => 45,
            'tanggal_kejadian' => '2026-10-25',
        ]);

        $this->get('/laporan')
            ->assertOk()
            ->assertSee('Desa Sukamaju')
            ->assertSee('Ayu');
    }
}
