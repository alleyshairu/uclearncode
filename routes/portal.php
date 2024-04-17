<?php

use Illuminate\Support\Facades\Route;
use Uc\Module\Portal\Controller\CourseController;
use Uc\Module\User\Controller\PasswordController;
use Uc\Module\Portal\Controller\ChapterController;
use Uc\Module\Portal\Controller\ProblemController;
use Uc\Module\Portal\Controller\StudentController;
use Uc\Module\Portal\Controller\TeacherController;
use Uc\Module\Portal\Controller\FeedbackController;
use Uc\Module\Portal\Controller\LanguageController;

Route::prefix('p')->group(function () {
    // admin routes
    Route::middleware(['auth', 'admin'])->group(function () {
        // users
        Route::put('/users/{id}/password', PasswordController::class)->name('user.password-update');

        // teachers
        Route::get('/teachers', [TeacherController::class, 'index'])->name('portal.teacher.index');
        Route::get('/teachers/create', [TeacherController::class, 'create'])->name('portal.teacher.create');
        Route::post('/teachers/store', [TeacherController::class, 'store'])->name('portal.teacher.store');
        Route::get('/teachers/{id}/show', [TeacherController::class, 'show'])->name('portal.teacher.show');
    });

    // teacher routes
    Route::middleware(['auth', 'teacher'])->group(function () {
        // students
        Route::get('/students', [StudentController::class, 'index'])->name('portal.student.index');

        // course
        Route::get('/languages', [LanguageController::class, 'index'])->name('portal.language.index');
        Route::get('/courses/{id}', [CourseController::class, 'show'])->name('portal.course.show');

        // chapter
        Route::get('/courses/{id}/chapter-create', [ChapterController::class, 'create'])->name('portal.chapter.create');
        Route::post('/chapter/store', [ChapterController::class, 'store'])->name('portal.chapter.store');
        Route::get('/chapter/{id}', [ChapterController::class, 'edit'])->name('portal.chapter.edit');
        Route::get('/chapter/{id}/problems', [ChapterController::class, 'problems'])->name('portal.chapter.problems');
        Route::post('/chapter/{id}/update', [ChapterController::class, 'update'])->name('portal.chapter.update');
        Route::get('/chapters/{id}/problem-create', [ProblemController::class, 'create'])->name('portal.problem.create');

        // problem
        Route::get('/problems', [ProblemController::class, 'index'])->name('portal.problem.index');
        Route::post('/problems/store', [ProblemController::class, 'store'])->name('portal.problem.store');
        Route::get('/problems/{id}', [ProblemController::class, 'edit'])->name('portal.problem.edit');
        Route::post('/problems/{id}/update', [ProblemController::class, 'update'])->name('portal.problem.update');

        // feedback
        // Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('portal.feedback.index');
    });
});
