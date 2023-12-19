<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeAttachmentRequest;
use App\Models\Employee;
use App\Models\EmployeeAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EmployeeAttachmentController extends Controller
{
    public function index()
    {
        $employee = Employee::find($_GET['e_id']);
        $employee_attachments = $employee->attachments;
        return response()->json([
            'data' => $employee_attachments
        ]);
    }

    public function show($id)
    {
        $attachment = EmployeeAttachment::findOrFail($id);
//        return Storage::download('file:///C:/Users/Enamul/OneDrive/Desktop/clicktab-main/public/employee/attachment/1682328003-644649c3708dd-attach.pdf');
////        return response()->json($attachment);

        $file = public_path(). '/employee/attachment/'.$attachment->document_type;
        $headers = ['Content-Type: image/jpeg'];

//        $path = public_path('employee/attachment/'.$attachment->document_type);
//        $fileName = $attachment->document_type;

        return Response::download($file, 'plugin.jpg', $headers);
    }

    public function store(EmployeeAttachmentRequest $request)
    {
        $attachment = new EmployeeAttachment();
        $attachment->document_name       = $request->document_name;
        if ($request->hasFile('document_type')) {
            $ext = $request->file('document_type')->extension();
            $final_name = time().'-'.uniqid().'-'.'attach'.'.'.$ext;

            $request->file('document_type')->move(public_path('employee/attachment/'), $final_name);

            $attachment->document_type = $final_name;
        }
        $attachment->employee_id                 = $request->employee_id;
        $attachment->save();

        $employee = Employee::find($request->employee_id);
        $employee_attachments = $employee->attachments;

        return response()->json([
            'message' => 'Employee attachment created successfully.',
            'data' => $employee_attachments
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'document_name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $attachment = EmployeeAttachment::find($id);
        $attachment->document_name       = $request->document_name;
        if ($request->hasFile('document_type') && $request->document_type != null) {
            # code...
            if ($attachment->document_type != null) {
                unlink(public_path('employee/attachment/'.$attachment->image));
            }
            $ext = $request->file('document_type')->extension();
            $final_name = time().'-'.uniqid().'-'.'attach'.'.'.$ext;

            $request->file('document_type')->move(public_path('employee/attachment/'), $final_name);

            $attachment->document_type = $final_name;
        }
        $attachment->employee_id                 = $request->employee_id;
        $attachment->save();

        return response()->json([
            'message' => 'Employee pay rate created successfully.',
            'data' => $attachment
        ], 200);
    }

    public function destroy($id)
    {
        $attachment = EmployeeAttachment::findOrFail($id);
        $attachment->delete();

        return response()->json(null, 204);
    }
}
