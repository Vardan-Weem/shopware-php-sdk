<?php
declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity;

use Vin\ShopwareSdk\Data\Entity\CustomField\CustomFieldCollection;

trait EntityCustomFieldsTrait
{
    protected $customFields;

    public function getCustomFields(): array|CustomFieldCollection|null
    {
        return $this->customFields;
    }

    public function setCustomFields(array|CustomFieldCollection|null $customFields): void
    {
        $this->customFields = $customFields;
    }
}
