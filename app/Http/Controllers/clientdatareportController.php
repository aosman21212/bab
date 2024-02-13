<?php

namespace App\Http\Controllers;

use App\DataTables\clientdatareportDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateclientdatareportRequest;
use App\Http\Requests\UpdateclientdatareportRequest;
use App\Repositories\clientdatareportRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class clientdatareportController extends AppBaseController
{
    /** @var clientdatareportRepository $clientdatareportRepository*/
    private $clientdatareportRepository;

    public function __construct(clientdatareportRepository $clientdatareportRepo)
    {
        $this->clientdatareportRepository = $clientdatareportRepo;
    }

    /**
     * Display a listing of the clientdatareport.
     *
     * @param clientdatareportDataTable $clientdatareportDataTable
     *
     * @return Response
     */
    public function index(clientdatareportDataTable $clientdatareportDataTable)
    {
        return $clientdatareportDataTable->render('clientdatareports.index');
    }

    /**
     * Show the form for creating a new clientdatareport.
     *
     * @return Response
     */
    public function create()
    {
        return view('clientdatareports.create');
    }

    /**
     * Store a newly created clientdatareport in storage.
     *
     * @param CreateclientdatareportRequest $request
     *
     * @return Response
     */
    public function store(CreateclientdatareportRequest $request)
    {
        $input = $request->all();

        $clientdatareport = $this->clientdatareportRepository->create($input);

        Flash::success('Clientdatareport saved successfully.');

        return redirect(route('clientdatareports.index'));
    }

    /**
     * Display the specified clientdatareport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clientdatareport = $this->clientdatareportRepository->find($id);

        if (empty($clientdatareport)) {
            Flash::error('Clientdatareport not found');

            return redirect(route('clientdatareports.index'));
        }

        return view('clientdatareports.show')->with('clientdatareport', $clientdatareport);
    }

    /**
     * Show the form for editing the specified clientdatareport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clientdatareport = $this->clientdatareportRepository->find($id);

        if (empty($clientdatareport)) {
            Flash::error('Clientdatareport not found');

            return redirect(route('clientdatareports.index'));
        }

        return view('clientdatareports.edit')->with('clientdatareport', $clientdatareport);
    }

    /**
     * Update the specified clientdatareport in storage.
     *
     * @param int $id
     * @param UpdateclientdatareportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclientdatareportRequest $request)
    {
        $clientdatareport = $this->clientdatareportRepository->find($id);

        if (empty($clientdatareport)) {
            Flash::error('Clientdatareport not found');

            return redirect(route('clientdatareports.index'));
        }

        $clientdatareport = $this->clientdatareportRepository->update($request->all(), $id);

        Flash::success('Clientdatareport updated successfully.');

        return redirect(route('clientdatareports.index'));
    }

    /**
     * Remove the specified clientdatareport from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clientdatareport = $this->clientdatareportRepository->find($id);

        if (empty($clientdatareport)) {
            Flash::error('Clientdatareport not found');

            return redirect(route('clientdatareports.index'));
        }

        $this->clientdatareportRepository->delete($id);

        Flash::success('Clientdatareport deleted successfully.');

        return redirect(route('clientdatareports.index'));
    }
}
