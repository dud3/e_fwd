<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class cleanEmail extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'email:clean';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Clean all the emails from the DB(database).';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$emails_truncate = DB::table('mails')->truncate();

		if($emails_truncate) {
			DB::raw("ALTER TABLE mails AUTO_INCREMENT = 1");
		}

		$this->info("Emails cleaned.");
	}
	

	// ========================
	// :: No arguments for now
	// ========================

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	/*
	protected function getArguments()
	{
		return array(
			array('example', InputArgument::REQUIRED, 'An example argument.'),
		);
	}
	*/

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	/*
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}
	*/

}
