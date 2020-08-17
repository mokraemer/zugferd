<?php

namespace horstoeko\zugferd\basic\ram;

/**
 * Class representing TradeSettlementHeaderMonetarySummationType
 *
 *
 * XSD Type: TradeSettlementHeaderMonetarySummationType
 */
class TradeSettlementHeaderMonetarySummationType
{

    /**
     * @var \horstoeko\zugferd\basic\udt\AmountType $lineTotalAmount
     */
    private $lineTotalAmount = null;

    /**
     * @var \horstoeko\zugferd\basic\udt\AmountType $chargeTotalAmount
     */
    private $chargeTotalAmount = null;

    /**
     * @var \horstoeko\zugferd\basic\udt\AmountType $allowanceTotalAmount
     */
    private $allowanceTotalAmount = null;

    /**
     * @var \horstoeko\zugferd\basic\udt\AmountType $taxBasisTotalAmount
     */
    private $taxBasisTotalAmount = null;

    /**
     * @var \horstoeko\zugferd\basic\udt\AmountType $taxTotalAmount
     */
    private $taxTotalAmount = null;

    /**
     * @var \horstoeko\zugferd\basic\udt\AmountType $grandTotalAmount
     */
    private $grandTotalAmount = null;

    /**
     * @var \horstoeko\zugferd\basic\udt\AmountType $totalPrepaidAmount
     */
    private $totalPrepaidAmount = null;

    /**
     * @var \horstoeko\zugferd\basic\udt\AmountType $duePayableAmount
     */
    private $duePayableAmount = null;

    /**
     * Gets as lineTotalAmount
     *
     * @return \horstoeko\zugferd\basic\udt\AmountType
     */
    public function getLineTotalAmount()
    {
        return $this->lineTotalAmount;
    }

    /**
     * Sets a new lineTotalAmount
     *
     * @param \horstoeko\zugferd\basic\udt\AmountType $lineTotalAmount
     * @return self
     */
    public function setLineTotalAmount(\horstoeko\zugferd\basic\udt\AmountType $lineTotalAmount)
    {
        $this->lineTotalAmount = $lineTotalAmount;
        return $this;
    }

    /**
     * Gets as chargeTotalAmount
     *
     * @return \horstoeko\zugferd\basic\udt\AmountType
     */
    public function getChargeTotalAmount()
    {
        return $this->chargeTotalAmount;
    }

    /**
     * Sets a new chargeTotalAmount
     *
     * @param \horstoeko\zugferd\basic\udt\AmountType $chargeTotalAmount
     * @return self
     */
    public function setChargeTotalAmount(\horstoeko\zugferd\basic\udt\AmountType $chargeTotalAmount)
    {
        $this->chargeTotalAmount = $chargeTotalAmount;
        return $this;
    }

    /**
     * Gets as allowanceTotalAmount
     *
     * @return \horstoeko\zugferd\basic\udt\AmountType
     */
    public function getAllowanceTotalAmount()
    {
        return $this->allowanceTotalAmount;
    }

    /**
     * Sets a new allowanceTotalAmount
     *
     * @param \horstoeko\zugferd\basic\udt\AmountType $allowanceTotalAmount
     * @return self
     */
    public function setAllowanceTotalAmount(\horstoeko\zugferd\basic\udt\AmountType $allowanceTotalAmount)
    {
        $this->allowanceTotalAmount = $allowanceTotalAmount;
        return $this;
    }

    /**
     * Gets as taxBasisTotalAmount
     *
     * @return \horstoeko\zugferd\basic\udt\AmountType
     */
    public function getTaxBasisTotalAmount()
    {
        return $this->taxBasisTotalAmount;
    }

    /**
     * Sets a new taxBasisTotalAmount
     *
     * @param \horstoeko\zugferd\basic\udt\AmountType $taxBasisTotalAmount
     * @return self
     */
    public function setTaxBasisTotalAmount(\horstoeko\zugferd\basic\udt\AmountType $taxBasisTotalAmount)
    {
        $this->taxBasisTotalAmount = $taxBasisTotalAmount;
        return $this;
    }

    /**
     * Gets as taxTotalAmount
     *
     * @return \horstoeko\zugferd\basic\udt\AmountType
     */
    public function getTaxTotalAmount()
    {
        return $this->taxTotalAmount;
    }

    /**
     * Sets a new taxTotalAmount
     *
     * @param \horstoeko\zugferd\basic\udt\AmountType $taxTotalAmount
     * @return self
     */
    public function setTaxTotalAmount(\horstoeko\zugferd\basic\udt\AmountType $taxTotalAmount)
    {
        $this->taxTotalAmount = $taxTotalAmount;
        return $this;
    }

    /**
     * Gets as grandTotalAmount
     *
     * @return \horstoeko\zugferd\basic\udt\AmountType
     */
    public function getGrandTotalAmount()
    {
        return $this->grandTotalAmount;
    }

    /**
     * Sets a new grandTotalAmount
     *
     * @param \horstoeko\zugferd\basic\udt\AmountType $grandTotalAmount
     * @return self
     */
    public function setGrandTotalAmount(\horstoeko\zugferd\basic\udt\AmountType $grandTotalAmount)
    {
        $this->grandTotalAmount = $grandTotalAmount;
        return $this;
    }

    /**
     * Gets as totalPrepaidAmount
     *
     * @return \horstoeko\zugferd\basic\udt\AmountType
     */
    public function getTotalPrepaidAmount()
    {
        return $this->totalPrepaidAmount;
    }

    /**
     * Sets a new totalPrepaidAmount
     *
     * @param \horstoeko\zugferd\basic\udt\AmountType $totalPrepaidAmount
     * @return self
     */
    public function setTotalPrepaidAmount(\horstoeko\zugferd\basic\udt\AmountType $totalPrepaidAmount)
    {
        $this->totalPrepaidAmount = $totalPrepaidAmount;
        return $this;
    }

    /**
     * Gets as duePayableAmount
     *
     * @return \horstoeko\zugferd\basic\udt\AmountType
     */
    public function getDuePayableAmount()
    {
        return $this->duePayableAmount;
    }

    /**
     * Sets a new duePayableAmount
     *
     * @param \horstoeko\zugferd\basic\udt\AmountType $duePayableAmount
     * @return self
     */
    public function setDuePayableAmount(\horstoeko\zugferd\basic\udt\AmountType $duePayableAmount)
    {
        $this->duePayableAmount = $duePayableAmount;
        return $this;
    }


}

