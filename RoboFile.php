<?php
/**
 * Custom console commands for the Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \ThinkShout\RoboDrupal\Tasks
{
  /**
   * Determines the database to start from when doing new work on this project.
   *
   * @return mixed
   *   Return the Pantheon environment you want to pull in on install (live,
   *   dev, etc), or FALSE to install from scratch.
   */
  protected function databaseSourceOfTruth() {
    // Until we have a working stable DB on Pantheon, leave this as "FALSE".
    return FALSE;
  }
}
