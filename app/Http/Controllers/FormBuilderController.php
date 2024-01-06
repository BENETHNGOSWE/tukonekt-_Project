<?php

namespace App\Http\Controllers;

use App\Models\FormBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FormBuilderController extends Controller
{

    protected $data = [];
    public function __construct()
    {
        $this->data['forms'] = FormBuilder::all();
        // $this->data['forms'] = FormBuilder::where('id', $request->id)->first();
    }
    public function index()
    {
        // $formsd = FormBuilder::all();
        return view('FormBuilder.index', $this->data);
    }

    public function create(Request $request)
    {
        $item = new FormBuilder();
        $item->name = $request->name;
        $item->content = $request->form;
        $item->selected = $request->selected;
        $item->save();

        return response()->json('added successfully');
    }


    public function edit($id)
    {
        $form = FormBuilder::find($id);
        return view('FormBuilder.edit', compact('form'));
    }

    public function update(Request $request, $id)
    {
        $form = FormBuilder::find($id);
        $form->name = $request->name;
        $form->selected = $request->selected;
        $form->update();
        return redirect()->route('home');
    }



    public function editData(Request $request)
    {
        return FormBuilder::where('id', $request->id)->first();
    }

    public function updateData(Request $request)
    {
        $item = FormBuilder::findOrFail($request->id);
        $item->name = $request->name;
        $item->content = $request->form;
        $item->update();
        return response()->json('updated successfully');
    }


    public function destroy($id)
    {
        $form = FormBuilder::findOrFail($id);
        $form->delete();

        return redirect('form-builder')->with('success', 'Form deleted successfully');
    }

    public function selectForm(Request $request)
    {
        $form = FormBuilder::findOrFail($request->id);
        $form->selected = true;
        $form->update();

        return response()->json('Form selectes Updated');
    }
}
