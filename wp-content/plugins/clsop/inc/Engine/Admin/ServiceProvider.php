<?php
/**
 * Source file was changed on the Fri Nov 24 13:30:07 2023 +0100
 */

namespace WP_Rocket\Engine\Admin;

use WP_Rocket\Dependencies\League\Container\ServiceProvider\AbstractServiceProvider;
use WP_Rocket\Engine\Admin\Deactivation\{DeactivationIntent, Subscriber};
use WP_Rocket\Engine\Admin\Metaboxes\PostEditOptionsSubscriber;
use WP_Rocket\ThirdParty\Plugins\Optimization\Hummingbird;

/**
 * Service Provider for admin subscribers.
 *
 * @since 3.3
 */
class ServiceProvider extends AbstractServiceProvider {

	/**
	 * The provides array is a way to let the container
	 * know that a service is provided by this service
	 * provider. Every service that is registered via
	 * this service provider must have an alias added
	 * to this array or it will be ignored.
	 *
	 * @var array
	 */
	protected $provides = [
		'deactivation_intent',
		'deactivation_intent_subscriber',
		'hummingbird_subscriber',
		'actionscheduler_admin_subscriber',
		'post_edit_options_subscriber',
	];

	/**
	 * Registers items with the container
	 *
	 * @return void
	 */
	public function register() {
		$options = $this->getContainer()->get( 'options' );

		$this->getContainer()->add( 'deactivation_intent', DeactivationIntent::class )
			->addArgument( $this->getContainer()->get( 'template_path' ) . '/deactivation-intent' )
			->addArgument( $this->getContainer()->get( 'options_api' ) )
			->addArgument( $options );
		$this->getContainer()->share( 'deactivation_intent_subscriber', Subscriber::class )
			->addArgument( $this->getContainer()->get( 'deactivation_intent' ) )
			->addTag( 'admin_subscriber' );
		$this->getContainer()->share( 'hummingbird_subscriber', Hummingbird::class )
			->addArgument( $options )
			->addTag( 'admin_subscriber' );
		$this->getContainer()->share( 'actionscheduler_admin_subscriber', ActionSchedulerSubscriber::class );
		$this->getContainer()->share( 'post_edit_options_subscriber', PostEditOptionsSubscriber::class )
			->addArgument( $options )
			->addArgument( $this->getContainer()->get( 'template_path' ) . '/metaboxes' )
			->addTag( 'admin_subscriber' );
	}
}
