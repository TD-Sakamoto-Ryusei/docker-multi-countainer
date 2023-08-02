<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\ProductReview42\Repository;

use Doctrine\ORM\QueryBuilder;
use Eccube\Entity\Product;
use Eccube\Repository\AbstractRepository;
use Eccube\Util\StringUtil;
use Plugin\ProductReview42\Entity\ProductReview;
use Plugin\ProductReview42\Entity\ProductReviewStatus;
use Doctrine\Persistence\ManagerRegistry;

/**
 * ProductReview.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductReviewRepository extends AbstractRepository
{
    /**
     * ProductReviewRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductReview::class);
    }

    /**
     * 検索条件での検索を行う。
     *
     * @param array $searchData
     *
     * @return QueryBuilder
     */
    public function getQueryBuilderBySearchData($searchData)
    {
        $qb = $this->createQueryBuilder('r')
            ->select('r, p, pc')
            ->innerJoin('r.Product', 'p')
            ->innerJoin('p.ProductClasses', 'pc');

        // 投稿者名・投稿者URL
        if (isset($searchData['multi']) && StringUtil::isNotBlank($searchData['multi'])) {
            $qb
                ->andWhere('r.reviewer_name LIKE :reviewer_name OR r.reviewer_url LIKE :reviewer_url')
                ->setParameter('reviewer_name', '%'.str_replace('%', '\\%', $searchData['multi']).'%')
                ->setParameter('reviewer_url', '%'.str_replace('%', '\\%', $searchData['multi']).'%');
        }

        // 商品名
        if (isset($searchData['product_name']) && StringUtil::isNotBlank($searchData['product_name'])) {
            $qb
                ->andWhere('p.name LIKE :product_name')
                ->setParameter('product_name', '%'.str_replace('%', '\\%', $searchData['product_name']).'%');
        }

        // 商品コード
        if (isset($searchData['product_code']) && StringUtil::isNotBlank($searchData['product_code'])) {
            $qb
                ->andWhere('pc.code LIKE :code')
                ->setParameter('code', '%'.str_replace('%', '\\%', $searchData['product_code']).'%');
        }

        // 性別
        if (!empty($searchData['sex']) && count($searchData['sex']) > 0) {
            $qb
                ->andWhere($qb->expr()->in('r.Sex', ':Sex'))
                ->setParameter(':Sex', $searchData['sex']);
        }

        // おすすめレベル
        if (isset($searchData['recommend_level']) && StringUtil::isNotBlank($searchData['recommend_level'])) {
            $qb
                ->andWhere($qb->expr()->in('r.recommend_level', ':recommend_level'))
                ->setParameter('recommend_level', $searchData['recommend_level']);
        }

        // 投稿日(開始)
        if (isset($searchData['review_start']) && !is_null($searchData['review_start'])) {
            $date = $searchData['review_start'];
            $qb
                ->andWhere('r.create_date >= :review_start')
                ->setParameter('review_start', $date);
        }

        // 投稿日(終了)
        if (isset($searchData['review_end']) && !is_null($searchData['review_end'])) {
            $date = clone $searchData['review_end'];
            $date
                ->modify('+1 days');
            $qb
                ->andWhere('r.create_date < :review_end')
                ->setParameter('review_end', $date);
        }

        // 公開・非公開
        if (!empty($searchData['status']) && count($searchData['status']) > 0) {
            $qb
                ->andWhere($qb->expr()->in('r.Status', ':Status'))
                ->setParameter('Status', $searchData['status']);
        }

        // Order By
        $qb->addOrderBy('r.id', 'DESC');

        return $qb;
    }

    /**
     * Get Avg and count.
     *
     * @param Product $Product
     *
     * @return mixed
     */
    public function getAvgAll(Product $Product)
    {
        $defaults = [
            'recommend_avg' => 0,
            'review_count' => 0,
        ];
        try {
            $qb = $this->createQueryBuilder('r')
                ->select('avg(r.recommend_level) as recommend_avg, count(r.id) as review_count')
                ->leftJoin('r.Product', 'p')
                ->where('r.Product = :Product')
                ->setParameter('Product', $Product)
                ->andWhere('r.Status = :Status')
                ->setParameter('Status', ProductReviewStatus::SHOW)
                ->groupBy('r.Product');

            return $qb->getQuery()->getSingleResult();
        } catch (\Exception $exception) {
            return $defaults;
        }
    }
}
