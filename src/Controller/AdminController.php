<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Repository\DistributedTicketsRepository;
use App\Repository\TicketsRepository;
use App\Repository\GameRepository;
use App\Repository\WinnersRepository;
use App\Repository\UserRepository;
use App\Entity\Winners;
use App\Entity\DistributedTickets;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Dompdf\Dompdf;
use Dompdf\Options;


class AdminController extends AbstractController
{
           
    protected $em;
    protected $distributedTicketsRepository;
    protected $ticketsRepository;
    protected $gameRepository;
    protected $winnersRepository;
    protected $userRepository;

    public function __construct(EntityManagerInterface $em,UserRepository $userRepository, WinnersRepository $winnersRepository, DistributedTicketsRepository $distributedTicketsRepository, TicketsRepository $ticketsRepository, GameRepository $gameRepository){
        $this->em = $em;
        $this->distributedTicketsRepository = $distributedTicketsRepository;
        $this->ticketsRepository = $ticketsRepository;
        $this->gameRepository = $gameRepository;
        $this->winnersRepository = $winnersRepository;
        $this->userRepository = $userRepository;
    }


    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin", name="app_admin")
     */
    public function admin(Request $request): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirectToRoute('app_login', []);  
        }
        $ticketdis = $this->distributedTicketsRepository->findAll();
        $ticketwin = $this->winnersRepository->findAll();
        $tickets = $this->ticketsRepository->findAll();
        $aboutUs = $this->userRepository->findByAboutUs();
        $city = $this->userRepository->findByCity();
        $newsLetterCustomer = $this->userRepository->findBy(['newsletter' => 1]);
        return $this->render('admin/index.html.twig', [
            'ticketsdis' => $ticketdis,
            'ticketwin' => $ticketwin,
            'tickets' => $tickets,
            'aboutUs' =>$aboutUs,
            'cities' =>$city,
            'newsLetterCustomerNB' =>count($newsLetterCustomer),
            'newsLetterCustomers' =>$newsLetterCustomer,
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/sendNewsletter", name="app_admin_send_newsletter")
     */
    public function sendNewsletter(Request $request): Response
    {
        $newsletterTitle = $request->request->get('newsletterTitle');
        $newsletter = $request->request->get('newsletter');

        return $this->redirectToRoute('app_login');
    }

        /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/refait", name="refait")
     */
    public function refait(Request $request,EntityManagerInterface $em): Response
    {   $game = $this->gameRepository->find(1);
        $game->setClosingDate(new \Datetime());
        $this->em->persist($game);
        $this->em->flush();
   

        return $this->redirectToRoute('app_admin');
    }

    
            /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/groswin", name="gros_win")
     */
    public function groswinAction(Request $request,EntityManagerInterface $em): Response{
        $t = $this->ticketsRepository->find(6);
        $game = $this->gameRepository->find(1);
        $date = $game->getClosingDate();       
        $wingros = $this->winnersRepository->findby(['ticket' => $t]);
        if ( !$wingros){
        $wins = $this->winnersRepository->findAll();
        $rand = rand(0,count($wins)-1);
        $w = $wins[$rand];
        $win = new Winners();
        $win->setUser($w->getUser());
        $win->setSend(false);
        $win->setTicket($t);
        $this->em->persist($win);
        $this->em->flush();
}
        
return $this->redirectToRoute('gros_lot');
    }


                /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/groslot", name="gros_lot")
     */
    public function groslotAction(Request $request,EntityManagerInterface $em): Response{
        $t = $this->ticketsRepository->find(6);
        $game = $this->gameRepository->find(1);
        $date = $game->getClosingDate();       
        $wingros = $this->winnersRepository->findBy(['ticket' => $t]);
        if($wingros){
            return $this->render('admin/groslot.html.twig', [
                'user' =>$wingros['0'],
                'date' =>$date, ]);}
                else{

                    return $this->render('admin/groslot.html.twig', [
                        'user' =>  null,
                        'date' =>$date, ]);}
                }
      
     
     

        /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/dowloadMails", name="Mails")
     */
    public function dowloadletter()
    {
              
        $users = $this->userRepository->findAll();
        
       
        $html = $this->renderView('admin/list.html.twig', [
            'users' =>$users, ]);
     
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->render();
             
            return new Response (
                $dompdf->stream('resume', ["Attachment" => false]),
                Response::HTTP_OK,
                ['Content-Type' => 'application/pdf']
            );
        
    }
        /**
     * @IsGranted("ROLE_EMPLOYE")
     * @Route("/admin/users", name="users")
     */
    public function usersAction(Request $request,EntityManagerInterface $em): Response{
              
        $users = $this->userRepository->findAll();
        
        return $this->render('admin/users.html.twig', [
            'users' =>  $users ]);
    
        
    }
        /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/employes", name="employes")
     */
    public function employesAction(Request $request,EntityManagerInterface $em): Response{
              
        $users = $this->userRepository->findAll();
        
        return $this->render('admin/employes.html.twig', [
            'users' =>  $users ]);
    
        
    }
        /**
         *@IsGranted("ROLE_ADMIN")
     * @Route("/admin/delete/{id}", name="deleteparticipant")
     */
    public function deleteparticipantAction(UserRepository $userss,EntityManagerInterface $em,$id)
    {
        $useer = $userss->find($id);
       if($useer){
        $em->remove($useer);
        $em->flush(); 
         
         return $this->redirectToRoute('users');}
    }

               /**
            * @IsGranted("ROLE_ADMIN")
     * @Route("/participanttouser/{id}", name="participanttouser")
     */
    public function participanttouserAction(UserRepository $userss, EntityManagerInterface $em, $id)
    {
        $useer = $userss->find($id);
        $useer->setRoles(array('ROLE_EMPLOYE'));
       if($useer){
        $em->persist($useer);
        $em->flush();
         
         return $this->redirectToRoute('users');}

         return $this->redirectToRoute('users');
    }

                   /**
            * @IsGranted("ROLE_ADMIN")
     * @Route("/employetouser/{id}", name="employetouser")
     */
    public function employetouserAction(UserRepository $userss, EntityManagerInterface $em, $id)
    {
        $useer = $userss->find($id);
        $useer->setRoles(array('ROLE_USER'));
       if($useer){
        $em->persist($useer);
        $em->flush();
         
         return $this->redirectToRoute('employes');}

         return $this->redirectToRoute('employes');
    }


    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/newgame", name="newgame")
     */
    public function newgameAction(Request $request,GameRepository $games,TicketsRepository $tickets ,EntityManagerInterface $em,DistributedTicketsRepository $dt)
    {
        $game = $games->find(1);
         
         if ( $_POST['datejeu'] > date('Y-m-d') && $_POST['datejeu'] > $game->getClosingDate()->format('Y-m-d')){

            $game->setClosingDate(date_modify(new \DateTime($_POST['datejeu']), '+30 day'));
            $em->persist($game);
            
            $t = $tickets->find(6);     
            $wingros = $this->winnersRepository->findOneBy(['ticket' => $t]);
            if($wingros){
                $this->winnersRepository->remove($wingros,true);
     
     for($nombre_tour = 1; $nombre_tour <= 1000; $nombre_tour++)
    {  
        $dt = new DistributedTickets();
        $rand = rand(0000000001, 9999999999);
        $dt->setNumero($rand);
        $em->persist($dt);  
        $em->flush();  
        
    }
               
            }
            return $this->redirectToRoute('gros_lot');
             
         }
         $this->addFlash('refus',"Vérifier la dates de votre demande ! ");
         return $this->redirectToRoute('gros_lot');
    }
    
}