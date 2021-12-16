<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Model;

class DebtLineItemResource
{
    /**
     * Debt Line Item ID
     *
     * @var string
     */
    protected $debtLineItemId;
    /**
     * SKU Code
     *
     * @var string
     */
    protected $skuCode;
    /**
     * SKU Group Name
     *
     * @var string
     */
    protected $skuGroupName;
    /**
     * Quantity
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * Project Id
     *
     * @var string
     */
    protected $projectId;
    /**
     * Project Name
     *
     * @var string
     */
    protected $projectName;
    /**
     * Start time of the usage
     *
     * @var \DateTime
     */
    protected $usageStart;
    /**
     * End time of the usage
     *
     * @var \DateTime
     */
    protected $usageEnd;
    /**
     * 
     *
     * @var PriceProperty
     */
    protected $priceTotal;
    /**
     * Invoice number
     *
     * @var string|null
     */
    protected $invoiceNumber;
    /**
     * Debt Line Item ID
     *
     * @return string
     */
    public function getDebtLineItemId() : string
    {
        return $this->debtLineItemId;
    }
    /**
     * Debt Line Item ID
     *
     * @param string $debtLineItemId
     *
     * @return self
     */
    public function setDebtLineItemId(string $debtLineItemId) : self
    {
        $this->debtLineItemId = $debtLineItemId;
        return $this;
    }
    /**
     * SKU Code
     *
     * @return string
     */
    public function getSkuCode() : string
    {
        return $this->skuCode;
    }
    /**
     * SKU Code
     *
     * @param string $skuCode
     *
     * @return self
     */
    public function setSkuCode(string $skuCode) : self
    {
        $this->skuCode = $skuCode;
        return $this;
    }
    /**
     * SKU Group Name
     *
     * @return string
     */
    public function getSkuGroupName() : string
    {
        return $this->skuGroupName;
    }
    /**
     * SKU Group Name
     *
     * @param string $skuGroupName
     *
     * @return self
     */
    public function setSkuGroupName(string $skuGroupName) : self
    {
        $this->skuGroupName = $skuGroupName;
        return $this;
    }
    /**
     * Quantity
     *
     * @return int|null
     */
    public function getQuantity() : ?int
    {
        return $this->quantity;
    }
    /**
     * Quantity
     *
     * @param int|null $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Project Id
     *
     * @return string
     */
    public function getProjectId() : string
    {
        return $this->projectId;
    }
    /**
     * Project Id
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * Project Name
     *
     * @return string
     */
    public function getProjectName() : string
    {
        return $this->projectName;
    }
    /**
     * Project Name
     *
     * @param string $projectName
     *
     * @return self
     */
    public function setProjectName(string $projectName) : self
    {
        $this->projectName = $projectName;
        return $this;
    }
    /**
     * Start time of the usage
     *
     * @return \DateTime
     */
    public function getUsageStart() : \DateTime
    {
        return $this->usageStart;
    }
    /**
     * Start time of the usage
     *
     * @param \DateTime $usageStart
     *
     * @return self
     */
    public function setUsageStart(\DateTime $usageStart) : self
    {
        $this->usageStart = $usageStart;
        return $this;
    }
    /**
     * End time of the usage
     *
     * @return \DateTime
     */
    public function getUsageEnd() : \DateTime
    {
        return $this->usageEnd;
    }
    /**
     * End time of the usage
     *
     * @param \DateTime $usageEnd
     *
     * @return self
     */
    public function setUsageEnd(\DateTime $usageEnd) : self
    {
        $this->usageEnd = $usageEnd;
        return $this;
    }
    /**
     * 
     *
     * @return PriceProperty
     */
    public function getPriceTotal() : PriceProperty
    {
        return $this->priceTotal;
    }
    /**
     * 
     *
     * @param PriceProperty $priceTotal
     *
     * @return self
     */
    public function setPriceTotal(PriceProperty $priceTotal) : self
    {
        $this->priceTotal = $priceTotal;
        return $this;
    }
    /**
     * Invoice number
     *
     * @return string|null
     */
    public function getInvoiceNumber() : ?string
    {
        return $this->invoiceNumber;
    }
    /**
     * Invoice number
     *
     * @param string|null $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(?string $invoiceNumber) : self
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
}