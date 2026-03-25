<?php

namespace App\Http\Controllers;

use App\Models\aprendices;
use App\Models\TiposDocumento;
use App\Models\FichaDeCaracterizacion;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use illuminate\Mail\SentMessage;

class AprendicesController extends Controller
{
    /**
     * Mostrar listado
     */
    public function index()
    {
        // Cargar relaciones (recomendado)
        $aprendiz= aprendices::with([
            'tipoDocumento',
            'fichaCaracterizacion'
        ])->get();

        return view('aprendices.index', compact('aprendiz'));
    }

    /**
     * Formulario crear
     */
    public function create()
    {
        // Para selects dinámicos
        $tipos = TiposDocumento::all();
        $fichas = FichaDeCaracterizacion::all();

        return view('aprendices.create', compact('tipos', 'fichas'));
    }

    /**
     * Guardar
     */
    public function store(Request $request)
    {
        // Validación profesional
        $request->validate([
            'Numdoc' => 'required|numeric',
            'Nombres' => 'required|string|max:100',
            'Apellidos' => 'required|string|max:100',
            'CorreoInstitucional' => 'nullable|email',
            'CorreoPersonal' => 'nullable|email',
            'tbltiposdocumento_NIS' => 'required|exists:tbltiposdocumento,NIS',
            'tblfichadecaraterizacion_NIS' => 'required|exists:tblfichadecaraterizacion,NIS'
        ]);

        aprendices::create($request->all());

        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendiz registrado correctamente');
    }

    /**
     * Mostrar uno
     */
    public function show($NIS)
    {
        $aprendiz = aprendices::where('NIS', $NIS)->firstOrFail();

        return view('aprendices.show', compact('aprendiz'));
    }

    /**
     * Formulario editar
     */
    public function edit($NIS)
    {
        $aprendiz = aprendices::where('NIS', $NIS)->firstOrFail();
        $tipos = TiposDocumento::all();
        $fichas = FichaDeCaracterizacion::all();


        return view('aprendices.edit', compact('tipos', 'fichas', 'aprendiz'));
    }

    /**
     * Actualizar
     */
    public function update(Request $request, $NIS)
    {
        $request->validate([
            'NIS' => 'required|numeric',
            'Numdoc' => 'required|numeric',
            'Nombres' => 'required|string|max:100',
            'Apellidos' => 'required|string|max:100',
            'tbltiposdocumento_NIS' => 'required|exists:tbltiposdocumento,NIS',
            'tblfichadecaraterizacion_NIS' => 'required|exists:tblfichadecaraterizacion,NIS'
        ]);

        $aprendiz = Aprendices::findOrFail($NIS);

        $NIS->update($request->all());

        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendiz actualizado');
    }

    /**
     * Eliminar
     */
    public function destroy(aprendices $aprendiz)
    {
        $aprendiz->delete();

        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendiz eliminado');
    }


    public function pdf($NIS)
    {
        $aprendiz = aprendices::where('NIS', $NIS)->firstOrFail();

        $pdf = Pdf::loadView('aprendices.pdf', compact('aprendiz'));

        return $pdf->stream('aprendiz_'.$aprendiz->NIS.'.pdf');
    }
    public function enviarpdf()
    {
        return view('aprendices.enviarpdf');
    }
    public function enviar(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'pdf' => 'required|mimes:pdf|max:2048'
        ]);

        try {

            // Guardar archivo
            $ruta = $request->file('pdf')->store('pdfs');

            // Enviar correo
            Mail::to($request->email)->send(new EnviarPdf($ruta));

            return back()->with('success', 'Correo enviado correctamente');

        } catch (\Exception $e) {

            return back()->with('error', 'Correo no enviado. Error: ' . $e->getMessage());

        }

    }
}
