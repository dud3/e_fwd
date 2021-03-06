<?php

/**
 * EmailListCtrl.
 * This is where the enmails go.
 */
class EmailListCtrl extends internalCtrl {

    public $user;
    public $repo_emails;

    /**
     * [__construct description]
     */
    public function __construct(EloquentEmailsRepositoryInterface $repo_emails) {
        $this->repo_emails = $repo_emails;
    }
    
    /**
     * [view_emails description]
     * @return [type] [description]
     */
    public function index() {
        $view = View::make('list.emails', compact('_emails', '_inbox'));
        return $view;
    }

    /**
     * Get all emails
     * @return [type] [description]
     */
    public function get_all() {
        return Response::json(["emails" => $this->repo_emails->get_all()], 200);
    }

    /**
     * Get by id.
     * @return [type] [description]
     */
    public function get_by_id($id) {
        return Response::json(["emails" => $this->repo_emails->get_by_id($id)], 200);
    }

    /**
     * Get by current user.
     * @return [type] [description]
     */
    public function get_by_user() {
        return Response::json(["emails" => $this->repo_emails->get_by_user(Sentry::getUser()->id)], 200);
    }

    /**
     * Get unseen/unsent emails.
     * @return [type] [description]
     */
    public function get_unsent() {
        return Response::json(["emails" => $this->repo_emails->get_unsent()], 200);
    }

    /**
     * Get unsent by current user.
     * @return [type] [description]
     */
    public function get_by_user_unsent() {
        return Response::json(["emails" => $this->repo_emails->get_by_user_unsent(Sentry::getUser()->id)], 200);
    }

    /**
     * Get colleciton of emails including the user informations.
     * @return [type] [description]
     */
    public function get_collection() {
        $input = Input::all();
        return Response::json(["emails" => $this->repo_emails->get_collection($input)], 200);
    }

    /**
     * Save email.
     * @return [type] [description]
     */
    public function saveEmail() {
        $input = Input::all();
        return Response::json(["email" => $this->repo_emails->saveEmail($input)], 200);
    }

    /**
     * Resend emails.
     * @return [type] [description]
     */
    public function reSendEmail() {
        $input = Input::all();
        return Response::json(["email" => $this->repo_emails->reSendEmail($input)], 200);
    }

    /**
     * Create new
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function create() {
        $input = Input::all();
    }

    /**
     * Update
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function update() {
        $input = Input::all();
    }

    /**
     * Search
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function search() {
        $input = Input::all();
    }

    /**
     * Delete
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id) {}

}
