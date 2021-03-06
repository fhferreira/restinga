<?php namespace Codecasts\Restinga\Contracts\Data;

use Codecasts\Restinga\Contracts\Service\Descriptor;

/**
 * Interface Resource.
 */
interface Resource extends ManipulateAttributes,
                           ManipulateNestedResources,
                           ManipulateResponses,
                           ReceiveAndSendData
{
    /**
     * @return Descriptor
     */
    public function getDescriptor();

    /**
     * @return string
     */
    public function getResourceName();

    /**
     * @return array
     */
    public function all();

    /**
     * @param string $identifier
     *
     * @return Resource
     */
    public function find($identifier);

    /**
     * @return bool
     */
    public function destroy();

    /**
     * @return \Codecasts\Restinga\Contracts\Http\Request
     */
    public function request();

    /**
     * @return \Unirest\Response
     */
    public function response();

    /**
     * @return $this|bool
     */
    public function save();

    /**
     * @return $this|bool
     */
    public function update();
}
